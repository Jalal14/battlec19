<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DonationImage;

class Post extends Model
{
    public $timestamps = false;
    private $_tempDirectory = "public/contents/temp/";

    public function donationImages()
    {
    	return $this->hasMany('App\Models\DonationImage');
    }

    public function store($files = null, $uploadPath = null, $objectId = null, $options = [])
	{
		$ids = [];
		if (empty($files) || empty($uploadPath) || empty($objectId) ) {
			return $ids;
		}
		$options = array_merge(['isUploaded' => false], $options);
		$filePath	  = $options['isUploaded'] ? $this->_tempDirectory : "";
        foreach($files as $file) {
            $continue = false;
			switch ($options['isUploaded']) {
            	case true:
            		$filename = $file;
            		$originalFileName = implode(array_slice(explode('_', $filename), 2));
            		if (file_exists($filePath . $filename)) {
            			$continue = rename($filePath . $filename, $uploadPath ."/". $filename);
            		}
            		break;
            	default:
            		$filename = preg_replace('/\..+$/', '', $file->getClientOriginalName());
            		$originalFileName = $file->getClientOriginalName();
                	$filename = strtolower(md5(time()). "_" . Auth::user()->id . "_" .$filename . "." . $file->getClientOriginalExtension());
                	if (!empty($options['size'])) {
                		$img = Image::make($file->getRealPath());
                		$continue = $img->resize($options['size'][0], $options['size'][1], function ($constraint) {
			                $constraint->aspectRatio();
			            })->save($uploadPath.'/'.$filename);
                	} else {
                		$continue = $file->move($uploadPath, $filePath . $filename);
                	}
            		break;
            }
	        if ($continue) {
				$data = new DonationImage();
				$data->post_id = $objectId;
				$data->photo = $filename;
				if ($data->save()) {
					$ids[] = $data->id;
				}
	        }
        }
        return $ids;
	}

    public function deleteFiles($objectType = null, $objectId = null, $options = [], $path = null)
    {
    	$result['status'] = 0;
		$result['fileStatus'] = __("Attachment does not exist");
		$files = $this->getFiles($objectType, $objectId, $options);
		if (!empty($files)) {
			foreach ($files as $key => $value) {
				if ($this->where('id', $value->id)->delete()) {
					$result = $this->unlinkFile($path."/".$value->file_name);
				}
			}
		}
		return json_encode($result);
    }

    public function getFiles($objectType = null, $objectId = null,	$options = [])
	{
		$options = array_merge(['ids' => [], 'isExcept' => false, 'limit' => null], $options);
		if (empty($objectType) && empty($objectId) && empty($options['ids'])) {
			return [];
		}
		$query = $this->select();
		if (!empty($objectType) && !empty($objectId)) {
			$objectId = !is_array($objectId) ? [$objectId] : $objectId;
			$query->where('object_type', $objectType)->whereIn('object_id', $objectId);
		}
		if (!empty($options['ids'])) {
			if ($options['isExcept']) {
				$query->whereNotIn('id', $options['ids']);
			} else {
				$query->whereIn('id', $options['ids']);
			}
		}
		
		if (!empty($options['limit'])) {
			$query->limit($options['limit']);
		}
		
		return $query->get();
	}

	public function unlinkFile($file)
	{
		$result['status'] = 0;
		$result['fileStatus'] = __("Attachment does not exist");
		if (file_exists($file)) {
			@unlink($file);
			$result['status'] = 1;
			$result['fileStatus'] = __("Attachment deleted");
		}
		return $result;
	}
}

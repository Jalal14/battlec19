<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class FileController extends Controller
{
    public function uploadEventAttachments(Request $request, $save = false) 
    {
        if (!empty($_FILES['attachment'])) {
            $user_id = $request->customer_id;
            $tempDirectory = "public/contents/temp";
            if (!file_exists($tempDirectory)) {
                mkdir($tempDirectory, config('app.filePermission'), true);
            }
            $files = $request->attachment;
            if ($_FILES['attachment']['error'] <> 0 || !is_uploaded_file($_FILES['attachment']['tmp_name'])) {
                $this->_returnJSON(false, __('Error in uploading file. Please try again.'));
            }
            if (($_FILES['attachment']["size"] / 1024) > 10240) {
                $this->_returnJSON(false, 'Maximum File Size :10MB');
            }

            $validator = Validator::make($request->all(), []);

            $validator->after(function ($validator) use ($request) {
                $files  = $request->file('attachment');
                if (empty($files)) {
                    return true;
                }

                if ($this->checkFileValidationOne($files->getClientOriginalExtension()) == false) {
                    $validator->errors()->add('upload_File', 'Allowed File Extensions: jpg, jpeg, gif, png');
                }
            });

            if ($validator->fails()) {
                $this->_returnJSON(false, 'Invalid file type');
            }
            
            $attachment = md5(time()) .'_'. $user_id .'_'. $_FILES["attachment"]["name"];
            $attachment = str_replace(array('/',' '), '_', $attachment);
            $attachmentPath = $tempDirectory .'/'. $attachment;
            if (move_uploaded_file($_FILES['attachment']['tmp_name'], $attachmentPath)) {
                $this->_returnJSON(true, array('message' => 'Uploaded successfully', 'attachment' => $attachment, 'attachment_type' => 'far fa-image', 'attachment_path' => $attachmentPath, 'attachment_name' => $_FILES["attachment"]["name"]));
            }
        }
        $this->_returnJSON(false, 'Error in uploading file. Please try again.');
    }

    public function deleteEventAttachment(Request $request) {
        $request->filePath = isset($request->filePath) && !empty($request->filePath) ? $request->filePath : $request->attachment;
        if ($request->id != 0) {
            return (new Post)->deleteFiles(null, null, ['ids' => [$request->id]], $request->filePath);
        } else {
            return (new Post)->unlinkFile($request->filePath);
        }
    }

    function checkFileValidationOne($ext) {
	    $valid = array(
	        'jpg', 'jpeg', 'png', 'gif'
	    );
	    return in_array($ext, $valid) ? true : false;
	}

	protected function _returnJSON($result, $data = null, $options = array()) {
        $options = array_merge(array('return' => false, 'render' => false, 'layout' => false), $options);
        if (is_string($data)) {
            $data = array('errorMessage' => $data);
        }
        // render the current action and add to html data key
        if (!empty($options['render'])) {
            if (!empty($options['layout'])) {
                $this->layout = $options['layout'];
            }
            if (empty($options['view'])) {
                $options['view'] = $this->action;
            }
            $data['html'] = $this->render($options['view']);
            if (is_object($data['html'])) {
                if (($options['layout'] == 'paginated-html')) {
                    $data['html'] = json_decode($data['html']->body(), true);
                } else {
                    $data['html'] = $data['html']->body();
                }
            }
        }
        if (!empty($options['sqlLogs'])) {
            $data['_sqlLogs'] = $options['sqlLogs'];
        }
        if ($result !== false) {
            if (!empty($options['return'])) {
                return json_encode(array('result' => true, 'serverTime' => date('Y-m-d H:i:s'), 'data' => $data));
            } else {
                if (!empty($options['jsonResponse'])) {
                    // send josn response without exiting the code
                    $this->autoRender = false;
                    // $this->response->type('json'); // konstantin can't handle text/x-json type at this momment
                    $this->response->body(json_encode(array('result' => true, 'serverTime' => date('Y-m-d H:i:s'), 'data' => $data)));
                    return $this->response;
                } else {
                    // @deprecated, should be removed in the future, this is currently default way
                    echo json_encode(array('result' => true, 'serverTime' => date('Y-m-d H:i:s'), 'data' => $data));
                    exit;
                }
            }
        } else {
            $errorMessage = false;
            if (!empty($data['errorMessage'])) {
                $errorMessage = $data['errorMessage'];
            }
            if (!empty($options['return'])) {
                return json_encode(array('result' => false, 'serverTime' => date('Y-m-d H:i:s'), 'errorMessage' => $errorMessage, 'data' => $data));
            } else {
                if (!empty($options['jsonResponse'])) {
                    // send josn response without exiting the code
                    $this->autoRender = false;
                    // $this->response->type('json'); // konstantin can't handle text/x-json type at this momment
                    $this->response->body(json_encode(array('result' => false, 'serverTime' => date('Y-m-d H:i:s'), 'errorMessage' => $errorMessage, 'data' => $data)));
                    return $this->response;
                } else {
                    // @deprecated, should be removed in the future, this is currently default way
                    echo json_encode(array('result' => false, 'serverTime' => date('Y-m-d H:i:s'), 'errorMessage' => $errorMessage, 'data' => $data));
                    exit;
                }
            }
        }
    }
}

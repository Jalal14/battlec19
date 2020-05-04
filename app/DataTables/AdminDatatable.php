<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;

use App\Models\Admin;

class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function ajax()
    {
        $admins = $this->query();
        return  datatables()
        ->of($admins)
        ->addColumn('image', function ($company) {
            return '<img class="img-fluid" src="'. asset('public/images/content/avatar.jpg') .'" style="height: 50px;">';
        })
        ->rawColumns(['image'])
        ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\MedicineDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return $this->applyScopes(Admin::select());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->addColumn(['data' => 'name', 'name' => 'name', 'title' => "Name"])
        ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => "Mobile"])
        ->addColumn(['data' => 'email', 'name' => 'email', 'title' => "Email"])
        ->addColumn(['data' => 'image', 'name' => 'image', 'title' => "Photo"])
        ->parameters([
            'pageLength' => $this->row_per_page,
            'order' => [1, 'asc']
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Medicine_' . date('YmdHis');
    }
}

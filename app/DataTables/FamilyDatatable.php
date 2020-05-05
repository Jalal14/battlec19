<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Models\Family;

class FamilyDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function ajax()
    {
        $families = $this->query();
        return  datatables()
        ->of($families)
        ->addColumn('action', function ($families) {
            return '<a href="' . url("admin/family/edit/$families->id") . '" title="Edit" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>';
        })
        ->rawColumns(['action'])
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
        return $this->applyScopes(Family::select());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->addColumn(['data' => 'id', 'name' => 'id', 'visible' => false])
        ->addColumn(['data' => 'name', 'name' => 'Name', 'title' => "Name"])
        ->addColumn(['data' => 'mobile', 'name' => 'mobile', 'title' => "Mobile"])
        ->addColumn(['data' => 'member', 'name' => 'member', 'title' => "Member"])
        ->addColumn(['data' => 'area', 'name' => 'area', 'title' => "Area"])
        ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => "Amount"])
        ->addColumn(['data' => 'donation_date', 'name' => 'donation_date', 'title' => "Date"])
        ->addColumn(['data' => 'in_charge', 'name' => 'in_charge', 'title' => "In Charge"])
        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => "Status"])
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => "Action"])
        ->parameters([
            'pageLength' => $this->row_per_page,
            'order' => [0, 'asc']
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

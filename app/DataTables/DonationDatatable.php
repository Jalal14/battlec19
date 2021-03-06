<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;

use App\Models\Donation;

class DonationDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function ajax()
    {
        $donations = $this->query();
        return  datatables()
        ->of($donations)
        ->addColumn('action', function ($donations) {
            return '<a href="' . url("admin/donation/edit/$donations->id") . '" title="Edit" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>';
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
        return $this->applyScopes(Donation::select());
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
        ->addColumn(['data' => 'mobile', 'name' => 'mobile', 'title' => "Mobile"])
        ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => "Amount"])
        ->addColumn(['data' => 'method', 'name' => 'method', 'title' => "Method"])
        ->addColumn(['data' => 'trx', 'name' => 'trx', 'title' => "TRX"])
        ->addColumn(['data' => 'donation_date', 'name' => 'donation_date', 'title' => "Date"])
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

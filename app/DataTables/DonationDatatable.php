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
        ->addColumn(['data' => 'mobile', 'name' => 'mobile', 'title' => "Mobile"])
        ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => "Amount"])
        ->addColumn(['data' => 'method', 'name' => 'method', 'title' => "Method"])
        ->addColumn(['data' => 'trx', 'name' => 'trx', 'title' => "TRX"])
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

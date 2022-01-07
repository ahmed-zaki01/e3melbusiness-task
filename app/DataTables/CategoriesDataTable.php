<?php

namespace App\DataTables;

use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoriesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('active', 'dashboard.categories.active')
            ->addColumn('actions', 'dashboard.categories.actions')
            ->rawColumns(['active', 'actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('categories-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(0, 'desc')
            ->lengthMenu([[10, 25, 50, 100, -1], [10, 25, 50, 100,  'All']])
            ->parameters([
                'dom' => 'Blfrtip',
            ])
            ->buttons(
                Button::make('excel')->text('Excel'),
                Button::make('print')->text('Print'),
            )->language(['url' => 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/English.json']);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name')->addClass('text-center')->title('Name'),
            Column::make('active')->addClass('text-center')->title('Active'),
            Column::computed('actions')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')->title('Actions'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Categories_' . date('YmdHis');
    }
}

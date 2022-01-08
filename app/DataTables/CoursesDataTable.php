<?php

namespace App\DataTables;

use App\Models\Course;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CoursesDataTable extends DataTable
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
            ->addColumn('active', 'dashboard.courses.active')
            ->addColumn('actions', 'dashboard.courses.actions')
            ->rawColumns(['active', 'actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Course $model)
    {
        return $model->with('category')->newQuery()->select('courses.*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('courses-table')
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
            Column::make('category.name')->addClass('text-center')->title('Category'),
            Column::make('level')->addClass('text-center')->title('Level'),
            Column::make('hours')->addClass('text-center')->title('Hours'),
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
        return 'Courses_' . date('YmdHis');
    }
}

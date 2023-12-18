<?php 
namespace App\DataTables;

use App\Models\Students;
use Yajra\DataTables\Services\DataTable;

class StudentsDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'students.action');
    }

    public function query(Student $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
                ->setTableId('students-table')
                ->columns($this->getColumns())
                ->minifiedAjax()
                ->orderBy(1);
    }

    protected function getColumns()
    {
        return [
            'id',
            'name',
            'middle_name',
            'last_name',
            'year_level',
            'id_number',
            'gender',
            'course',
            'email',
            'status',
            'department_id',
            'scholarship_id',
            'created_at',
            'updated_at',
        ];
    }

    protected function filename()
    {
        return 'Students_' . date('YmdHis');
    }
}


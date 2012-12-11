<?php defined('SYSPATH') or die('No direct script access.');

class Widget {

    protected $_route_name='widget'; // �������� ����� ������������ �������� �� ���������
    protected $_params=array();      // ������ ������������ ����������
    protected $_widget_name;         // �������� ������� (����������)

    /*
     * ����� ������� Widget::load('widget_name', array('param' => 'val'), 'route_name');
     * @param   string  �������� �������
     * @param   array   ������ ������������ ����������
     * @param   string  �������� ����� ������� �������
     */
    public static function load($widget_name,array $params = NULL, $route_name = NULL)
    {	
        $widget = new Widget($widget_name, $params, $route_name);
        return $widget->render();
    }

    public function __construct($widget_name, $params = NULL, $route_name = NULL)
    {
        if ($params != NULL)
        {
            $this->_params = $params;
        }

        if ($route_name != NULL)
        {
            $this->_route_name = $route_name;
        }

        $this->_widget_name = $widget_name;
    }

    public function render()
    {
        $this->_params['controller'] = $this->_widget_name;
        $url = Route::get($this->_route_name)->uri($this->_params);

        return Request::factory($url)->execute();
    }

}
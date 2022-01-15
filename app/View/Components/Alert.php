<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message = "このメッセージはデフォルトです。", $type = "success")
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function addClass()
    {
        $result = '';
        switch ($this->type) {
            case 'success':
                $result = 'bg-green-500';
                break;
            case 'info':
                $result = 'bg-blue-200';
                break;
            case 'alert':
                $result = 'bg-red-500';
                break;
            case 'warning':
                $result = 'bg-yellow-500';
                break;
                defalut:
                $result = 'bg-green-500';
        }
        return $result;
    }
}

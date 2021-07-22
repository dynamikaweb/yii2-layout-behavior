<?php 

namespace dynamikaweb\layout;

class ChangeLayout extends \yii\base\ActionFilter
{
    public $when = true;

    public $layout;

    public function beforeAction($action)
    {
        if (is_callable($this->when) && !call_user_func($this->when, $action)) {
            return true;
        }

        if (!is_callable($this->when) && !$this->when) {
            return true;
        }

        if (is_callable($this->layout)) {
            $this->owner->layout = call_user_func($this->layout, $action);
            return true;
        }

        $this->owner->layout = $this->layout;
        return true;
    }
}

<?php
    interface IModel {
        public function save();
        public function exists($item, $column = '');
        public function from($array);
    }
?>
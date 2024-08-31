<?php

class Controller {
    public function model($model) {
        // Construct the fully qualified class name
        $modelClass = 'App\\Model\\' . $model;
        
        // Require the model file (optional if using an autoloader)
        $modelPath = '../app/src/models/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
        } else {
            throw new Exception("Model file for {$modelClass} not found.");
        }

        // Instantiate the model class with its namespace
        if (class_exists($modelClass)) {
            return new $modelClass();
        } else {
            throw new Exception("Model class {$modelClass} not found.");
        }
    }

    public function view($view, $data = []) {
        // Check if the view file exists and then include it
        $viewPath = '../app/src/views/' . $view . '.php';
        if (file_exists($viewPath)) {
            // Extract the data array to variables
            extract($data);
            
            // Include the view file
            require_once $viewPath;
        } else {
            throw new Exception("View file for {$view} not found.");
        }
    }
    
}

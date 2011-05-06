<?php
    // See the accompanying README for how to use Fitzgerald!

    include('lib/fitzgerald.php');

    class Application extends Fitzgerald {
        // Define your controller methods, remembering to return a value for the browser!
        // Basic get request
        public function get_index() {
            return $this->render('home');
        }
        
        public function get_page($page) {
            return $this->render($page);
        }    
    }

    $app = new Application(array('layout' => 'application'));

    // Define your url mappings. Take advantage of placeholders and regexes for safety.

    $app->get('/', 'get_index');
    $app->get('/:page', 'get_page');
    $app->run();
?>
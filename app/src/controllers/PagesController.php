<?php

class PagesController extends Controller {
    private $pagesModel;

    public function __construct() {
        $this->pagesModel = $this->model('PagesModel');
    }

    public function home() {
        $levels = $this->pagesModel->getLevels();
        $data = [];
        
        foreach ($levels as $level) {
            $subLevels = $this->pagesModel->getSubLevels($level->level_id);
            $subLevelsData = [];
            
            foreach ($subLevels as $subLevel) {
                $courses = $this->pagesModel->getCoursesBySubLevelId($subLevel->sub_level_id);
                $modules = $this->pagesModel->getModulesBySubLevelId($subLevel->sub_level_id);
                $subLevelsData[] = [
                    'sub_level' => $subLevel,
                    'courses' => $courses,
                    'modules' => $modules
                ];
            }
            
            $data['levels'][] = [
                'level' => $level,
                'sub_levels' => $subLevelsData
            ];
        }
        
        // Optionally fetch recent files/resources
        $data['recent_files'] = $this->pagesModel->getRecentFiles();
    
        $this->view('pages/home', $data);
    }
    

    public function about() {
        $this->view('pages/about');
    }

    public function contact() {
        $this->view('pages/contact');
    }
}

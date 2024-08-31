<?php

namespace App\Model;

require_once '../app/core/Database.php';
use Database;

class PagesModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get all levels
    public function getLevels() {
        $this->db->query("SELECT * FROM levels");
        return $this->db->resultSet();
    }

    // Get sub-levels by level_id
    public function getSubLevels($level_id) {
        $this->db->query("SELECT * FROM sub_levels WHERE level_id = :level_id");
        $this->db->bind(':level_id', $level_id);
        return $this->db->resultSet(); // Array of stdClass objects
    }

    // Get courses by sub_level_id
    public function getCoursesBySubLevelId($sub_level_id) {
        $this->db->query("SELECT * FROM courses WHERE sub_level_id = :sub_level_id");
        $this->db->bind(':sub_level_id', $sub_level_id);
        return $this->db->resultSet(); // Array of stdClass objects
    }

    // Get modules by sub_level_id
    public function getModulesBySubLevelId($sub_level_id) {
        $this->db->query("SELECT * FROM modules WHERE sub_level_id = :sub_level_id");
        $this->db->bind(':sub_level_id', $sub_level_id);
        return $this->db->resultSet(); // Array of stdClass objects
    }

    // Get recent files
    public function getRecentFiles($limit = 5) {
        $this->db->query("SELECT * FROM files ORDER BY created_at DESC LIMIT :limit");
        $this->db->bind(':limit', $limit, \PDO::PARAM_INT);
        return $this->db->resultSet(); // Array of stdClass objects
    }

    // Get level by ID (for detailed view or other purposes)
    public function getPagesById($id) {
        $this->db->query("SELECT * FROM levels WHERE level_id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single(); // Single stdClass object
    }
}

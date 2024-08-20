-- /config/schema.sql

-- Drop tables if they already exist
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS resources;
DROP TABLE IF EXISTS tags;
DROP TABLE IF EXISTS resource_tags;

-- Create 'users' table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create 'resources' table
CREATE TABLE resources (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id)
);

-- Create 'tags' table
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Create 'resource_tags' table (many-to-many relationship)
CREATE TABLE resource_tags (
    resource_id INT,
    tag_id INT,
    PRIMARY KEY (resource_id, tag_id),
    FOREIGN KEY (resource_id) REFERENCES resources(id),
    FOREIGN KEY (tag_id) REFERENCES tags(id)
);

-- Insert sample data into 'users' table
INSERT INTO users (username, password_hash, email) VALUES
('admin', PASSWORD('adminpassword'), 'admin@example.com'),
('user', PASSWORD('userpassword'), 'user@example.com');

-- Insert sample data into 'tags' table
INSERT INTO tags (name) VALUES
('Education'),
('Technology'),
('Health');

-- Insert sample data into 'resources' table
INSERT INTO resources (title, description, created_by) VALUES
('Introduction to PHP', 'A beginner-friendly guide to PHP programming.', 1),
('Database Design Basics', 'Understanding relational database design and normalization.', 1);

-- Link resources to tags
INSERT INTO resource_tags (resource_id, tag_id) VALUES
(1, 1),
(2, 2),
(2, 3);

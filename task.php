#!/usr/bin/env php
<?php 
    class Task {
        public int $id;
        public string $description;
        public string $status;
        public string $createdAt;
        public string $updatedAt;

        public function __construct(int $id, string $description, string $status = 'todo', ?string $createdAt = null, ?string $updatedAt = null)
        {
            $now = date("Y-m-d H:i:s");

            $this->id = $id;
            $this->description = $description;
            $this->status = $status;
            $this->createdAt = $createdAt ?? $now;
            $this->updatedAt = $updatedAt ?? $now; 
        }

        public function toArray() : array {
            return [
                'id' => $this->id,
                'description' => $this->description,
                'status' => $this->status,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
            ];
        }
    }

    $command = $argv[1] ?? null;

    switch($command) {
        case "add":
            break;
        
        case "update":
            break;

        case "delete":
            break;
    }

?>
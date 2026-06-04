<?php
class DashboardController extends Controller
{
    public function index()
    {
        require_once "core/auth-check.php";
        $this->view("dashboard/views/index");
    }
} ?>
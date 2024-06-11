<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
    body {
        background-color: #5F6F52;
    }

    * {
        margin: 0;
        list-style: none;
        text-decoration: none;
        font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;
    }

    .sidebar {
        position: fixed;
        left: 0;
        max-width: 300px;
        width: 25%;
        height: 100%;
        background: #FEFAE0;
    }


    .sidebar header {
        font-size: 22px;
        color: white;
        text-align: center;
        line-height: 70px;
        background: #A9B388;
        user-select: none;
    }

    .sidebar ul {
        margin-top: 10px;
    }

    .sidebar ul li {
        position: relative;
        cursor: pointer;
        padding: 10px;
    }

    .sidebar ul li:hover {
        background-color: #A9B388;
        transition: 0.3s ease;
    }

    .sidebar ul li a {
        color: black;
        text-decoration: none;
        font-size: 20px;
        padding: 15px;
        line-height: 30px;
    }

    .sidebar ul .feat-show {
        display: none;
        padding-left: 20px;
        margin-right: -10px;
        margin-left: -10px;
        margin-bottom: -15px;
        background-color: #fefae0;
    }

    .sidebar ul .feat-show li {
        margin-bottom: 5px;
    }

    .sidebar ul .button.active .feat-show {
        display: block;
    }

    .sidebar ul li a .dropdown {
        position: absolute;
        right: 0;
        margin: 20px;
        transition: 0.3s ease;
        top: -2px;
    }

    .item .feat-show.show {
        display: block;
    }

    .sidebar .menu .item .feat-show a {
        padding-left: 55px;
    }

    .container-fluid {
        margin: 20px;
        background-color: #FEFAE0;
        height: 100%;
    }

    nav {
        padding: 20px;
        justify-content: center;
    }

    nav ul li {
        display: inline;
        position: relative;
        justify-content: center;
        padding: 8px 30px;

    }

    #logout {
        color: #5F6F52;
        background-color: #A9B388;
        border-radius: 5px;
    }

    #logout:hover {
        color: #A9B388;
        background-color: #5F6F52;
        border-radius: 5px;
    }

    #out {
        text-decoration: none;
        color: black;

    }

    .box {
        display: flex;

    }

    .items1,
    .items2 {
        background-color: #A9B388;
        border-radius: 30px;
        padding: 20px 80px;
        padding-left: 20px;
        padding-right: 120px;
        margin: 30px auto;
        box-shadow: 5px 2px 10px;
    }

    .items1 i,
    .items2 i {
        float: inline-end;
        padding-left: 250px;
    }

    .diagram {
        display: flex;
        justify-content: center;
    }

    .chart {
        padding: 2rem;
        background-color: #A9B388;
        margin: 30px auto;
        padding: 20px 80px;
        padding-left: 20px;
        padding-right: 120px;
        border-radius: 30px;
    }

    .icon {
        display: flex;
    }


    .footer {
        background-color: #B99470;
        position: fixed;
        bottom: 0;
        right: 0;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul>
                        <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-school"></i> Profil Sekolah</a></li>
                        <li><a href="#"><i class="fas fa-user-graduate"></i> Guru</a></li>
                        <li><a href="#"><i class="fas fa-book"></i> Mata Pelajaran</a></li>
                        <li><a href="#"><i class="fas fa-users"></i> Siswa</a></li>
                        <li><a href="#"><i class="fas fa-calendar-alt"></i> Absensi</a></li>
                        <li><a href="#"><i class="fas fa-clipboard-check"></i> Nilai</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="header">
                    <h1>Dashboard</h1>
                    <div class="user">
                        <img src="https://via.placeholder.com/30" alt="User Avatar">
                        <span class="name">Widia Nurindri</span>
                    </div>
                    <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1 0 1 1zm5-6s1 0 1-1-1 0-1 1zm-5-3s-1 0-1-1 1 0 1 1zm5-6s1 0 1-1-1 0-1 1zm-5-3s-1 0-1-1 1 0 1 1z" />
                                        <path d="M5.25 7a.25.25 0
<?php
namespace MVC\views;
session_start();
session_destroy();
header('Location:../public');
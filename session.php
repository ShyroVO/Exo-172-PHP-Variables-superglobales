<?php
session_start();

echo "Hi ". $_SESSION['nom'] ." ". $_SESSION['prenom'] . "<br>
    You have ". $_SESSION['age'] . "y.o.!";
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $doctor_id = $_POST['doctor_id'];
    $slot_id = $_POST['slot_id'];

    $query = "INSERT INTO appointments (name, age, gender, contact, city, doctor_id, slot_id) VALUES ('$name', '$age', '$gender', '$contact', '$city', '$doctor_id', '$slot_id')";
    if ($conn->query($query) === TRUE) {
        header("Location: confirmation.php?appointment_id=" . $conn->insert_id);
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method='POST'>
    <input type='text' name='name' placeholder='Name' required>
    <input type='number' name='age' placeholder='Age' required>
    <select name='gender'><option>Male</option><option>Female</option></select>
    <input type='text' name='contact' placeholder='Contact' required>
    <input type='text' name='city' placeholder='City' required>
    <input type='text' name='doctor_id' placeholder='Doctor ID' required>
    <input type='text' name='slot_id' placeholder='Slot ID' required>
    <button type='submit'>Book Appointment</button>
</form>

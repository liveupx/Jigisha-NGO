<?php // /pdf/generate_pdf.php
require '../vendor/autoload.php';
use Dompdf\Dompdf;
if (isset($_GET['appointment_id'])) {
    include '../config.php';
    $appointment_id = $_GET['appointment_id'];
    $query = "SELECT * FROM appointments WHERE id = $appointment_id";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $html = "<h2>Appointment Details</h2>
        <p><strong>Name:</strong> {$row['name']}</p>
        <p><strong>Age:</strong> {$row['age']}</p>
        <p><strong>Doctor ID:</strong> {$row['doctor_id']}</p>";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("Appointment_Details.pdf", ["Attachment" => true]);
    } else {
        echo "Invalid Appointment ID!";
    }
} else {
    echo "No Appointment ID Provided!";
}
?>

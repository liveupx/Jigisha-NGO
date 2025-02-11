<?php
if (isset($_GET['appointment_id'])) {
    $appointment_id = $_GET['appointment_id'];
    echo "<h2>Appointment Booked Successfully!</h2>";
    echo "<a href='pdf/generate_pdf.php?appointment_id=$appointment_id' target='_blank'>Download PDF</a>";
}
?>

<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$uploaded_text_file = $upload_directory . basename($_FILES['text_file']['name']);
$temporary_file = $_FILES['text_file']['tmp_name'];

if (move_uploaded_file($temporary_file, $uploaded_text_file)) {
    $text_file_content = file_get_contents($uploaded_text_file, 'r');
    ?>
    <textarea cols="70" rows="30"><?php echo $text_file_content; ?></textarea>
    <?php
} else {
    echo 'Failed to upload file';
}

// Handle Audio File
$uploaded_audio_file = $upload_directory . basename($_FILES['audio_file']['name']);
$temporary_file = $_FILES['audio_file']['tmp_name'];
$path_audio = $relative_path . basename($_FILES['audio_file']['name']);

if (move_uploaded_file($temporary_file, $uploaded_audio_file)) {
    ?>
    <audio controls autoplay>
        <source src="<?php echo $path_audio; ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <?php
} else {
    echo 'Failed to upload file';
}

// Handle Video File
$uploaded_video_file = $upload_directory . basename($_FILES['video_file']['name']);
$temporary_file = $_FILES['video_file']['tmp_name'];
$path_video = $relative_path . basename($_FILES['video_file']['name']);

if (move_uploaded_file($temporary_file, $uploaded_video_file)) {
    ?>
    <video width="320" height="240" controls autoplay>
        <source src="<?php echo $path_video; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <?php
} else {
    echo 'Failed to upload file';
}

// Handle PDF File
$uploaded_pdf_file = $upload_directory . basename($_FILES['pdf_file']['name']);
$temporary_file = $_FILES['pdf_file']['tmp_name'];
$path_pdf = $relative_path . basename($_FILES['pdf_file']['name']);

if (move_uploaded_file($temporary_file, $uploaded_pdf_file)) {
    ?>
    <object data="<?php echo $path_pdf; ?>" type="application/pdf" width="100%" height="500px">
        <p>Unable to display PDF file. <a href="<?php echo $uploaded_pdf_file; ?>">Download</a> instead.</p>
    </object>

    <?php
} else {
    echo 'Failed to upload file';
}

echo '<pre>';
var_dump($_FILES);
exit;
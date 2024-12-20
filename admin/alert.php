<?php
// password alert
if ($password_result == true) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-triangle me-1"></i>
    Set a password to your account <a href="" class="alert-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Setup your password now!</a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_GET["pass_not_matched"] == "true") {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Password you entered not matched.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of password alert

//hod alert
if ($_SESSION["hod_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! New HOD added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["hod_desk_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! HOD desk updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["hod_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! New HOD is not added.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["hod_desk_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! HOD desk is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["hod_file_format_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! only JPG, JPEG, PNG & GIF files are allowed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// end of hod alert

//timetable alert
if ($_SESSION["timetable_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Timetable updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["timetable_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Timetable Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["timetable_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Timetable deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["timetable_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Timetable is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["timetable_insert_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Timetable is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["timetable_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Timetable is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// end of timetable alert

//ind_visit alert
if ($_SESSION["ind_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Industrial Visit Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ind_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Industrial Visit updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ind_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Industrial Visit deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ind_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Industrial Visit is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ind_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Industrial Visit is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ind_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Industrial Visit is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of ind_visit

//notice alert
if ($_SESSION["notice_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Notice Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Notice updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Notice is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Notice is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Notice is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Notice deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notice_date_error"] == true) {
    echo '<div class="alert alert-alert alert-dismissible fade show" role="alert">
    Error! Invalid Date.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of notice alert

//result_analysis alert
if ($_SESSION["result_analysis_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Result Analysis Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["result_analysis_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Result Analysis updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["result_analysis_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Result Analysis deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["result_analysis_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Result Analysis is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["result_analysis_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Result Analysis is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["result_analysis_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Result Analysis is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of result analysis alert

//academic ache alert
if ($_SESSION["academic_performance_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Analysis Performance Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["academic_performance_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Analysis Performance updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["academic_performance_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Analysis Performance deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["academic_performance_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Analysis Performance is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["academic_performance_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Analysis Performance is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["academic_performance_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Analysis Performance is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of academic ache aert

// basic file upload error
if ($_SESSION["file_move_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! There was an error while uploading a file.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["file_upload_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! The new file was not uploaded.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// end of basic file upload error


if ($dept_added == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! New department added successfully.New department name = ' . $name . '.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($dept_not_added == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error!New deparment is not added.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//mou alert
if ($_SESSION["mou_add_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! MOU Added Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["mou_delete_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! MOU Deleted Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["mou_update_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! MOU Updated Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// end of mou alert

//staff ach alert
if ($_SESSION["staff_ach_add_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Staff Achievement Added Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["staff_ach_delete_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Staff Achievement Deleted Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["staff_ach_update_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Staff Achievement Updated Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of staff ach alert

//achad ach alert
if ($_SESSION["achad_ach_add_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Achademic Achievement Added Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["achad_ach_delete_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Achademic Achievement Deleted Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["achad_ach_update_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Achademic Achievement Updated Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of achad ach alert

//other ach alert
if ($_SESSION["other_ach_add_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Other Achievement Added Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["other_ach_delete_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Other Achievement Deleted Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["other_ach_update_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Other Achievement Updated Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of other ach alert

// faculty alert
if ($_SESSION["faculty_file_format_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! only JPG, JPEG, PNG & GIF files are allowed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_add_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Faculty Added Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_add_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Faculty is not Added.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_file_format_error_p"] == true) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Error! Resume is not uploaded | Only PDF or DOCX files are allowed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_delete_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Faculty Deleted Succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_update_success"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Faculty Updated Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["faculty_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Faculty is not Updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


//new admin alert

if ($_SESSION["admin_created"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! New Admin User created Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_create_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Admin user not created.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_exist"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Admin username already exist.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Admin user deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Admin user delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Admin user update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_password_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Invalid Current Password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_password_match_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Password not matched.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["admin_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Admin user updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_created"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! New Department User created Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_create_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Department user not created.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Department user deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Department user delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if ($_SESSION["dept_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Department user update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_password_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Invalid Current Password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_password_match_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Password not matched.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["dept_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Department user updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if ($_SESSION["scholarship_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Scholarship added Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["scholarship_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Scholarship not added.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["scholarship_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Scholarship deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["scholarship_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Scholarship delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["scholarship_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Scholarship updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["scholarship_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Scholarship update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Application Form added Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Application Form not added.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Application Form deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Application Form delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Application Form updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["form_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Application Form update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Carousel created Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Carousel not created.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Carousel deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Carousel delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Carousel updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["carousel_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Carousel update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if ($_SESSION["head_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! New Head created Successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["head_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! New Head not created.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["head_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Head deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["head_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Head delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["grievances_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Grievances deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["grievances_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! grievances delete error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["head_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Head updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["head_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Head update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["prn_desk_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! principal Desk updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["prn_desk_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Principal Desk update error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ac_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Academic Calender Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($_SESSION["ac_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Academic Calender updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ac_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Academic Calender deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ac_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Academic Calender updated error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Academic Calender is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if ($_SESSION["ac_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Academic Calender is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["ac_file_format_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! only PDF files are allowed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["program_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Success! Program updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["program_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Program updated error.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


//Notes alert
if ($_SESSION["notes_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Lecture Notes Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Lecture Notes updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Lecture Notes deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Lecture Notes is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Lecture Notes is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["notes_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Lecture Notes is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of Notes alert


//Paper alert
if ($_SESSION["paper_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Question Paper Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["paper_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Question Paper updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["paper_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Question Paper deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["paper_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Question Paper is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["paper_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Question Paper is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["paper_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Question Paper is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//end of Paper alert


//video alert
if ($_SESSION["video_inserted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Video Lectures Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["video_updated"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Lecture Notes updated successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["video_deleted"] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    success! Video Lectures deleted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["video_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Video Lectures is not inserted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["video_update_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Video Lectures is not updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if ($_SESSION["video_delete_error"] == true) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error! Video Lectures is not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

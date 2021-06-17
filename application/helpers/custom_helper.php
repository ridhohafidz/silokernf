<?php

  function alertsuccess($name,$text) {
    $CI =& get_instance();
    $alert = ' 
    <div class="alert alert-success fade show" role="alert">
    '.$text.'
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    ';
    return $CI->session->set_flashdata($name,$alert);
  }
 
function alerterror($name,$text) {
    $CI =& get_instance();
    $alert = ' 
    <div class="alert alert-danger fade show" role="alert">
    '.$text.'
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    ';
    return $CI->session->set_flashdata($name,$alert);
  }

    function is_admin()
  {
    $CI =& get_instance();
    if(! $CI->session->has_userdata('role')) {
      redirect('page/login');
    }
  }

function grade($nilai) {
  if($nilai > 85 && $nilai <= 100) {
    $grade = 'A';
  } 
  elseif($nilai > 70 && $nilai <= 85) {
    $grade = 'B';
  } else {
    $grade = 'C';
  }
  return $grade;
}

function status_lulus($grade) {
  if($grade != 'C') {
    $status = 'LULUS';
  } else {
    $status = 'TIDAK LULUS';
  }

  return $status;
}
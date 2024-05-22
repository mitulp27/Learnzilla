  $(document).ready(function(){
     
     $('#fname').focus(function(){
       $('#fname-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#fname').blur(function(){
      $a = $('#fname').val();
      if($a.length == 0){
       $('#fname-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#uname').focus(function(){
       $('#uname-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#uname').blur(function(){
      $a = $('#uname').val();
      if($a.length == 0){
       $('#uname-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#email').focus(function(){
       $('#email-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#email').blur(function(){
      $a = $('#email').val();
      if($a.length == 0){
       $('#email-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#enr').focus(function(){
       $('#enr-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#enr').blur(function(){
      $a = $('#enr').val();
      if($a.length == 0){
       $('#enr-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#password').focus(function(){
       $('#pass-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#password').blur(function(){
      $a = $('#password').val();
      if($a.length == 0){
       $('#pass-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#repassword').focus(function(){
       $('#repass-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#repassword').blur(function(){
      $a = $('#repassword').val();
      if($a.length == 0){
       $('#repass-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#prof').focus(function(){
       $('#prof-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#prof').blur(function(){
      $a = $('#prof').val();
      if($a.length == 0){
       $('#prof-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#deptno').focus(function(){
       $('#deptno-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#deptno').blur(function(){
      $a = $('#deptno').val();
      if($a.length == 0){
       $('#deptno-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#sem').focus(function(){
       $('#sem-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#sem').blur(function(){
      $a = $('#sem').val();
      if($a.length == 0){
       $('#sem-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#contact').focus(function(){
       $('#contact-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#contact').blur(function(){
      $a = $('#contact').val();
      if($a.length == 0){
       $('#contact-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
  });
  $("input#fname").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#email").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#enr").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("textarea#prof").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#deptno").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#sem").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#contact").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#password").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
  $("input#repassword").on({
    keydown:function (e) {
      if (e.which===32)
        return false;
    },
    change:function () {
      this.value=this.value.replace(/\s/g,"");
    }
  });
@extends('template.menubar-employee')
@section('title','Trang Chủ')
@section('main')
  <img src="images/0.jpg" style="width:100%;"/>

    <div class="row">
        <div class="panel panel-chat">
          <div class="panel-heading">
              <a href="#" class="chatMinimize" onclick="return false"><span>Duy Đức Lương</span></a>
              <a href="#" class="chatClose" onclick="return false"><i class="glyphicon glyphicon-remove"></i></a>
              <div class="clearFix"></div>
          </div>
          <div class="panel-body">
              <div class="messageHer">
                  <img src="#" alt="404"/>
                  <span>M là con chó phải không?</span>
                  <div class="clearFix"></div>
              </div>
              <div class="messageMe">
                  <img src="#" alt="403"/>
                  <span>ờ t là chó mà ;(</span>
                  <div class="clearFix"></div>
              </div>
              <div class="clearFix"></div>
          </div>
          <div class="panel-footer">
              <textarea name="textMessage" cols="0" rows="0"></textarea>
          </div>
      </div>
    </div>
@stop

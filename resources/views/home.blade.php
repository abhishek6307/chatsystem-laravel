@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- chat-list-section s  -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    Chat List
                </div>
                <div id="chat-body" class="card-body">

                @include("layouts.chat_list");

                </div>
            </div>
        </div>
        <!-- chat-list-section e  -->

        <!-- message-section s  -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header text-center">
                  Conversation
                </div>
                <div id="msg-body" class="card-body">
                    <!-- <div class="no-chat text-center">No Chat Selected</div> -->
                  @include("layouts.msg_list");



                </div>
                <div class="card-footer">
                 
                        <form action="" id="create-msg-form">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <fieldset class="form-group">
                                    <textarea name="msg" id="msg" class="form-control"  placeholder="Write your message..">

                                    </textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <fieldset class="form-group">
                                    <input type="button" class="btn btn-primary btn-block" name="submit" id="create-msg"
                                        value="Send">
                                </fieldset>
                            </div>
                            </div>
                        </form>
                 
                </div>
            </div>
        </div>
        <!-- message-section e  -->
    </div>
</div>
@endsection

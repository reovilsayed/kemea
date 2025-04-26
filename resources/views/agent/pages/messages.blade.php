<x-agent.app>

    @push('css')
        <link rel="stylesheet" href="{{ asset('agent-assets/css/chat.css') }}">
        <style>

        </style>
    @endpush
    <div class="container padding-xxl">



        <!-- char-area -->
        <section class="message-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="chat-area">
                            <!-- chatlist -->
                            <div class="chatlist  bg-white">
                                <div class="modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="chat-header">
                                            <div class="msg-search">
                                                <div class="input-group-prepend">
                                                    <div class="input-group mb-3">
                                                        <form action="" method="get">
                                                            <div class="input-group-prepend">
                                                                <button type="submit" class="input-group-text"
                                                                    id="basic-addon1">
                                                                    <i
                                                                        class="material-symbols-rounded opacity-5">search</i>

                                                                </button>
                                                            </div>
                                                            <input type="text" class="form-control "
                                                                placeholder="Search.."
                                                                style="padding-left: 35px !important"
                                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                                        </form>
                                                    </div>
                                                </div>
                                                <a class="" href="#"></a>
                                            </div>


                                        </div>

                                        <div class="modal-body mt-2">
                                            <!-- chat-list -->
                                            <div class="chat-lists">

                                                <div class="chat-list">
                                                    <h5 class="message-title mb-3">Message <span
                                                            class="badge bg-primary p-1 px-2">5</span></h5>
                                                    <a href="#"
                                                        class="d-flex align-items-center border-bottom pb-3">
                                                        <div class="flex-shrink-0">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                alt="user img">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <div class="d-flex justify-content-between me-1">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>09:00 PM</p>
                                                            </div>
                                                            <p class="latest-message ms-1">Hi! How are you</p>
                                                        </div>
                                                    </a>
                                                    <a href="#"
                                                        class="d-flex align-items-center border-bottom pb-3">
                                                        <div class="flex-shrink-0">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                alt="user img">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <div class="d-flex justify-content-between me-1">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>09:00 PM</p>
                                                            </div>
                                                            <p class="latest-message ms-1">Hi! How are you</p>
                                                        </div>
                                                    </a>
                                                    <a href="#"
                                                        class="d-flex align-items-center border-bottom pb-3">
                                                        <div class="flex-shrink-0">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                alt="user img">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <div class="d-flex justify-content-between me-1">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>09:00 PM</p>
                                                            </div>
                                                            <p class="latest-message ms-1">Hi! How are you</p>
                                                        </div>
                                                    </a>




                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chatlist -->



                            <!-- chatbox -->
                            <div class="chatbox ">
                                <div class="modal-dialog-scrollable bg-white ms-3">
                                    <div class="modal-content">
                                        <div class="msg-head border-bottom-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center">
                                                        <span class="chat-icon"><img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg"
                                                                alt="image title"></span>
                                                        <div class="flex-shrink-0">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                alt="user img">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h3>Mehedi Hasan</h3>
                                                            <p>Property name : Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Error, possimus.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="modal-body">
                                            <div class="msg-body">
                                                <ul>
                                                    <li class="sender">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                alt="user img">
                                                            <span class="message-sender-name">David</span>
                                                            <span class="time">10:06 am</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <p> Hey, Are you there? </p>
                                                        </div>
                                                    </li>

                                                    <li class="repaly">


                                                        <div class="me-0">
                                                            <div class="d-flex justify-content-end gap-2">
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <span class="time">10:20 am</span>
                                                                        <span class="message-sender-name">You</span>
                                                                    </div>
                                                                    <p>yes!</p>
                                                                </div>

                                                                <img class="" height="50"
                                                                    src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                    alt="user img">
                                                            </div>




                                                        </div>


                                                    </li>
                                                    <li class="repaly">


                                                        <div class="me-0">
                                                            <div class="d-flex justify-content-end gap-2">
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <span class="time">10:20 am</span>
                                                                        <span class="message-sender-name">You</span>
                                                                    </div>
                                                                    <p>yes!</p>
                                                                </div>

                                                                <img class="" height="50"
                                                                    src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                    alt="user img">
                                                            </div>




                                                        </div>


                                                    </li>






                                                </ul>
                                            </div>
                                        </div>


                                        <div class="send-box">
                                            <form action="">
                                                <input type="text" class="form-control col-md-11" aria-label="message…"
                                                    placeholder="Write message…">

                                                <div class="attach ">

                                                    <span class="label">
                                                        <img class="img-fluid"
                                                            src="https://mehedihtml.com/chatbox/assets/img/upload.svg"
                                                            alt="image title">
                                                    </span><input type="file" name="upload" id="upload"
                                                        class="upload-box" placeholder="Upload File"
                                                        aria-label="Upload File">
                                                </div>






                                                <button type="button"><i
                                                        class="material-symbols-rounded ">send</i> </button>
                                            </form>

                                          

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chatbox -->


                    </div>
                </div>
            </div>
    </div>
    </section>

    </div>
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            jQuery(document).ready(function() {

                $(".chat-list a").click(function() {
                    $(".chatbox").addClass('showbox');
                    console.log('hello')
                    return false;
                });

                $(".chat-icon").click(function() {
                    $(".chatbox").removeClass('showbox');
                });


            });
        </script>
    @endpush
</x-agent.app>

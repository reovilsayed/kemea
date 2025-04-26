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
                                                            class="badge bg-primary p-1 px-2">{{ $allUnseenMessages->count() }}</span>
                                                    </h5>

                                                    @if ($users->count() > 0)
                                                        @foreach ($users as $itemUser)
                                                            @php
                                                                $allMessages = $itemUser->sentMessages->merge(
                                                                    $itemUser->receivedMessages,
                                                                );
                                                                $lastMessage = $allMessages
                                                                    ->sortByDesc('created_at')
                                                                    ->first();

                                                            @endphp
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
                                                                        <h3>{{ $itemUser->name }}</h3>
                                                                        <p>{{ $lastMessage->created_at->diffForHumans() }}
                                                                        </p>

                                                                    </div>
                                                                    <p class="latest-message ms-1">
                                                                        {{ $lastMessage->message }}</p>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    @else
                                                        <p>No User Found</p>
                                                    @endif




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
                                        @if (count($massages) > 0)
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
                                                                <h3>{{ $user->name }}</h3>
                                                                <p>Property name :
                                                                    {{ $massages->first()?->property->home_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="modal-body">
                                                <div class="msg-body">
                                                    <ul>
                                                        @foreach ($massages as $message)
                                                            @if ($message->sender_id == auth()->id())
                                                                <li class="repaly">


                                                                    <div class="me-0">
                                                                        <div class="d-flex justify-content-end gap-2">
                                                                            <div>
                                                                                <div class="d-flex">
                                                                                    <span
                                                                                        class="time">{{ $message->created_at->diffForHumans() }}
                                                                                    </span>
                                                                                    <span
                                                                                        class="message-sender-name">You</span>
                                                                                </div>
                                                                                @if ($message->message)
                                                                                    <p>{{ $message->message }}</p>
                                                                                @endif

                                                                            </div>

                                                                            <img class="" height="50"
                                                                                src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                                alt="user img">
                                                                        </div>
                                                                        @if ($message->file)
                                                                            <div style="margin-right: 50px"> <a
                                                                                    style="font-size: 14px;text-decoration:underline"
                                                                                    href="{{ Storage::url($message->file) }}"
                                                                                    target="_blank">See
                                                                                    File</a></div>
                                                                        @endif



                                                                    </div>


                                                                </li>
                                                            @else
                                                                <li class="sender">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img class="img-fluid"
                                                                            src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                                                            alt="user img">

                                                                        <span
                                                                            class="message-sender-name">{{ $message->sender->name }}</span>
                                                                        <span
                                                                            class="time">{{ $message->created_at->diffForHumans() }}</span>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        @if ($message->message)
                                                                            <p>{{ $message->message }} </p>
                                                                        @endif
                                                                    </div>
                                                                    @if ($message->file)
                                                                    <div style="margin-right: 50px"> <a
                                                                            style="font-size: 14px;text-decoration:underline"
                                                                            href="{{ Storage::url($message->file) }}"
                                                                            target="_blank">See
                                                                            File</a></div>
                                                                @endif
                                                                </li>
                                                            @endif
                                                        @endforeach





                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="send-box">
                                                <form action="{{ route('message.store', $user->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" class="form-control col-md-11"
                                                        aria-label="message…" name="message"
                                                        placeholder="Write message…">

                                                    <div class="attach ">

                                                        <span class="label">
                                                            <img class="img-fluid"
                                                                src="https://mehedihtml.com/chatbox/assets/img/upload.svg"
                                                                alt="image title">
                                                        </span><input type="file" name="file" id="upload"
                                                            class="upload-box" placeholder="Upload File"
                                                            aria-label="Upload File">
                                                    </div>


                                                    <input type="hidden" name="property_id"
                                                        value="{{ $massages->first()?->property->id }}">



                                                    <button type="submit"><i
                                                            class="material-symbols-rounded ">send</i>
                                                    </button>
                                                </form>



                                            </div>
                                    </div>
                                    @endif
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

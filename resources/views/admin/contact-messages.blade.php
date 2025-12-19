@extends('layouts.app')

@section('title', 'Contact Messages')

@section('header-content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="false" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        <h1>Contact Messages</h1>
                        <h3>All messages received from customers.<br>
                            Manage and view customer inquiries.</h3>
                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="contact page-section" id="messages">
        <div class="container">
            <div class="heading">
                <h2>Customer Messages</h2>
                <h3>All contact form submissions are displayed below.<br>
                    Total Messages: {{ $messages->total() }}</h3>
            </div>
        </div>

        <div class="container w960">
            <div class="row">
                @if($messages->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                                        </td>
                                        <td>
                                            <span title="{{ $message->message }}">
                                                {{ Str::limit($message->message, 50) }}
                                            </span>
                                        </td>
                                        <td>{{ $message->created_at->format('M d, Y H:i') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#messageModal{{ $message->id }}">
                                                View
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal for viewing full message -->
                                    <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Message from {{ $message->name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Name:</strong> {{ $message->name }}</p>
                                                    <p><strong>Email:</strong> <a
                                                            href="mailto:{{ $message->email }}">{{ $message->email }}</a></p>
                                                    <p><strong>Date:</strong> {{ $message->created_at->format('M d, Y H:i:s') }}</p>
                                                    <hr>
                                                    <p><strong>Message:</strong></p>
                                                    <p>{{ $message->message }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="mailto:{{ $message->email }}" class="btn btn-primary">Reply via
                                                        Email</a>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $messages->links() }}
                        </div>
                    </div>
                @else
                    <div class="alert alert-info text-center" role="alert">
                        <h4>No Messages Yet</h4>
                        <p>There are no contact messages in the database yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <style>
        .table-responsive {
            margin-top: 20px;
        }

        .table {
            background: white;
            border-radius: 5px;
        }

        .table th {
            background-color: #333;
            color: white;
        }

        .table tr:hover {
            background-color: #f5f5f5;
        }

        .modal-content {
            border-radius: 5px;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
    </style>
@endsection
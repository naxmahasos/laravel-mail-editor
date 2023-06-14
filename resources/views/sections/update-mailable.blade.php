@extends('maileclipse::layout.app')

@section('title', 'View Mailable')

@section('content')

    <div class="col-lg-10 col-md-12">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('mailableList') }}">Mailables</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $resource['name'] }}</li>
            </ol>
        </nav>
        <form id="create_mailable" action="{{ route('updateMailable', $resource['name']) }}" method="POST">
            @csrf
            <div class="card my-4">
                <div class="card-header d-flex align-items-center justify-content-between"><h5>Details</h5>
                </div>
                <div class="card-body card-bg-secondary">
                    <table class="table mb-0 table-borderless">
                        <tbody>
                        <tr>
                            <td class="table-fit font-weight-sixhundred">Name</td>
                            <td>
                                {{ $resource['name'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="table-fit font-weight-sixhundred">Namespace</td>
                            <td>
                                {{ $resource['namespace'] }}
                            </td>
                        </tr>

                        <tr>
                            <td class="table-fit font-weight-sixhundred">Subject</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mailableSubject" name="subject"
                                           placeholder="Subject" required value="{{ $resource['data']->subject }}">
                                    <small class="form-text text-muted">Enter mailable subject e.g <b>Welcome User</b>,
                                        <b>WelcomeUser</b></small>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-fit font-weight-sixhundred">View</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mailableView" name="view"
                                           placeholder="View" required value="{{ $resource['data']->view }}">
                                    <small class="form-text text-muted">Enter mailable template view e.g <b>maileclipse::templates.template</b>,
                                        <b>template.view</b></small>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>

    </div>

@endsection

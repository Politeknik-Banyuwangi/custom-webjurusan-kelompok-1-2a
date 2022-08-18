@extends('layout_pageadmin.panel')
@section('title','Data Kritik dan Saran')
@section('content')
<div class="container">
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <a class="btn btn-sm btn-success text-white" href="#">Add</a>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <form class="table-search-form row gx-1 align-items-center">
                            <div class="col-auto">
                                <input type="text" id="search-orders" name="searchorders"
                                    class="form-control search-orders" placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn app-btn-secondary">Search</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!--//row-->
            </div>
            <!--//table-utilities-->
        </div>
        <!--//col-auto-->
    </div>
    <!--//row-->

    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell">Title</th>
                                    <th class="cell">Content</th>
                                    <th class="cell">Image</th>
                                    <th class="cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell">1</td>
                                    <td class="cell">John Sanders</td>
                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat
                                        erat</span></td>
                                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                    <td class="cell">
                                        <a class="btn-sm app-btn-secondary" href="#">Edit</a> |
                                        <a class="btn-sm app-btn-secondary" href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!--//app-pagination-->

        </div>
        <!--//tab-pane-->

    </div>
</div>
@endsection

<style>
    tbody tr td {
        white-space: normal;
        max-width: 200px;
        word-wrap: break-word;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .text-end {
        max-width: 1000px;
    }
/* .w-5 {display: none} */
</style>

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">

        <div class="card shadow border-0 mb-7">
            <div class="card-header">
                <h5 class="mb-0">Work With Us Messages</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company</th>
                            <th scope="col">Website</th>
                            <th scope="col">Job</th>
                            <th scope="col">About</th>
                            <th scope="col">Message</th>
                            <th scope="col">Time</th>
                            <th scope="col">Operation</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td><strong>{{ $item['name'] }}</strong></td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['phone'] }}</td>
                                <td>{{ $item['company'] }}</td>
                                <td>{{ $item['website'] }}</td>
                                <td>{{ $item['job'] }}</td>
                                <td>{{ $item['about'] }}</td>
                                <td>{{ $item['message'] }}</td>
                                <td>{{ $item['created_at'] }}</td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        @if ($item['operation'] == 'Not Read')
                                            <i class="bg-success"></i>
                                        @else
                                            <i class="bg-warning"></i>
                                        @endif
                                        {{ $item['operation'] }}
                                    </span>
                                </td>
                                <td class="text-end">
                                    @if ($item['operation'] == 'Not Read')
                                        <a href="/admin/work/read/{{ $item['id'] }}" class="btn btn-sm btn-neutral">Mark As Read</a>
                                    @endif
                                    <a href="/admin/work/view/{{ $item['id'] }}" class="btn btn-sm btn-neutral">View</a>
                                    <a href="/admin/work/delete/{{ $item['id'] }}" class="btn btn-sm btn-neutral"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer border-0 py-5">
                <div class="pagination">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</main>

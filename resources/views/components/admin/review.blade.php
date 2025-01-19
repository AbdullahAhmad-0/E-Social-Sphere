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
.w-5 {display: none}
</style>

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">

        <div class="card shadow border-0 mb-7">
            <div class="card-header">
                <h5 class="mb-0">Reviews</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Rating</th>
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
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        {{ $item['rating'] }}: &nbsp;
                                        @php
                                            $rating = '';
                                            for ($i = 0; $i < $item['rating']; $i++) {
                                                // $rating = $rating . '★';
                                                $rating = '<i class="bg-success">⭐</i>' . $rating;
                                            }
                                            echo $rating;
                                        @endphp
                                    </span>
                                </td>
                                <td>{{ $item['message'] }}</td>
                                <td>{{ $item['created_at'] }}</td>
                                <td class="text-end">
                                    <a href="/admin/review/view/{{ $item['id'] }}" class="btn btn-sm btn-neutral">View</a>
                                    <a href="/admin/review/delete/{{ $item['id'] }}" class="btn btn-sm btn-neutral"><i class="bi bi-trash"></i></a>
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

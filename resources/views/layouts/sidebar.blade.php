<div class="col-md-3">
    <div class="card">
        <h5 class="card-title bg-secondary p-2">Menu</h5>
        <div class="card-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <i class="bi bi-person"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="bi bi-people"></i> User and Access Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inventories.index') }}">
                        <i class="bi bi-box"></i> Inventory
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('requisitions.index') }}">
                        <i class="bi bi-clipboard-check"></i> Requisitions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('invoices.index') }}">
                        <i class="bi bi-file-earmark-text"></i> Invoices
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports.index') }}">
                        <i class="bi bi-bar-chart"></i> Reporting Analytics
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

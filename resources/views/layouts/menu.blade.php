<li class="nav-item {{ Request::is('contacts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contacts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contacts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('logs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('logs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Logs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('wabHistories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('wabHistories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Wab Histories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('chatLogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('chatLogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Chat Logs</span>
    </a>
</li>

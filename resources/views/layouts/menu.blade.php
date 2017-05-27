<li class="{{ Request::is('diets*') ? 'active' : '' }}">
    <a href="{!! route('diets.index') !!}"><i class="fa fa-edit"></i><span>Diets</span></a>
</li>

<li class="{{ Request::is('workouts*') ? 'active' : '' }}">
    <a href="{!! route('workouts.index') !!}"><i class="fa fa-edit"></i><span>Workouts</span></a>
</li>

<li class="{{ Request::is('machines*') ? 'active' : '' }}">
    <a href="{!! route('machines.index') !!}"><i class="fa fa-edit"></i><span>Machines</span></a>
</li>

<li class="{{ Request::is('supplements*') ? 'active' : '' }}">
    <a href="{!! route('supplements.index') !!}"><i class="fa fa-edit"></i><span>Supplements</span></a>
</li>


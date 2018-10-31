<div class="col-md-3">
    <div class="card">
        <div class="card-header">System Menu</div>
        <div>
            <ul style="list-style: none; margin-left: -40px;">
                @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 4)
                    <li class="@if(Route::currentRouteName() == 'saccos.organizations.management')li-bg @else @endif"><a  style="text-decoration: none; color: grey;" href="{{route('saccos.organizations.management')}}" class="@if(Route::currentRouteName() == 'saccos.organizations.management') a-active @else @endif"><small><b>-</b> Saccos Organizations</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'saccos.organizations.departments')li-bg @else @endif"><a href="{{route('saccos.organizations.departments')}}" class="@if(Route::currentRouteName() == 'saccos.organizations.departments') a-active @else @endif" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Organization Departments</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'saccos.loans.management')li-bg @else @endif"><a href="{{route('saccos.loans.management')}}" class="@if(Route::currentRouteName() == 'saccos.loans.management') a-active @else @endif" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Loans Management</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'saccos.members.managements')li-bg @else @endif"><a  class="@if(Route::currentRouteName() == 'saccos.members.managements') a-active @else @endif" href="{{route('saccos.members.managements')}}"  style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Members Management</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'saccos.contributions.payments.managements')li-bg @else @endif"><a  class="@if(Route::currentRouteName() == 'saccos.contributions.payments.managements') a-active @else @endif" href="{{route('saccos.contributions.payments.managements')}}"  style="text-decoration: none; color: grey;"><small><b>-</b>Saccos Contributions and  Payments </small></a></li>
                    <li class="@if(Route::currentRouteName() == 'Saccos.salaries.management')li-bg @else @endif"><a  class="@if(Route::currentRouteName() == 'Saccos.salaries.management') a-active @else @endif" href="{{route('Saccos.salaries.management')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Salaries Management</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'saccos.shares.management')li-bg @else @endif"><a  class="@if(Route::currentRouteName() == 'saccos.shares.management') a-active @else @endif" href="{{route('saccos.shares.management')}}"  style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Shares Management</small></a></li>
                    <li class="@if(Route::currentRouteName() == 'system.users.accounts.management')li-bg @else @endif"><a href="{{route('system.users.accounts.management')}}" class="@if(Route::currentRouteName() == 'system.users.accounts.management') a-active @else @endif" style="text-decoration: none; color: grey;"><small><b>-</b> System Users Accounts Management</small></a></li>

                @else
                    <li><a href="{{route('user.loan')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Apply Loan</small></a></li>
                    <li><a href="{{route('user.payment.contribution')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Contributions and Payments</small></a></li>
                    <li><a href="{{route('user.share')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Share </small></a></li>
                    <li><a href="{{route('user.salary.payments.panel ')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Salary Payments Panel </small></a></li>
                    <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Dividend </small></a></li>
                @endif

            </ul>
        </div>
    </div>
</div>

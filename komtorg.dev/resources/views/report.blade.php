@extends('layout')

@section('content')
	<table class="mdl-data-table mdl-js-data-table">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Nickname</th>
                <th>Age</th>
                <th class="mdl-data-table__cell--non-numeric">Living?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">John Lennon</td>
                <td class="mdl-data-table__cell--non-numeric">The smart one</td>
                <td>40</td>
                <td class="mdl-data-table__cell--non-numeric">No</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Paul McCartney</td>
                <td class="mdl-data-table__cell--non-numeric">The cute one</td>
                <td>73</td>
                <td class="mdl-data-table__cell--non-numeric">Yes</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">George Harrison</td>
                <td class="mdl-data-table__cell--non-numeric">The shy one</td>
                <td>58</td>
                <td class="mdl-data-table__cell--non-numeric">No</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Ringo Starr</td>
                <td class="mdl-data-table__cell--non-numeric">The funny one</td>
                <td>74</td>
                <td class="mdl-data-table__cell--non-numeric">Yes</td>
              </tr>
            </tbody>
        </table>
@endsection
<!-- CDN Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Script for display table -->
<script>
    $(document).ready(function() {
        $('#mail_table').DataTable();
    });
    window.$('#mail_table').DataTable();
</script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

<!-- Sweetalert -->
@include('sweetalert::alert')

<!-- Livewire -->
@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>
<script>
    var archive = document.getElementById("archive-display");
    var category = document.getElementById("category-display");
    var activity = document.getElementById("activity-display");
    var display = [archive, category, activity]

    var req = {{ $request }};
    for (var i = 0; i < display.length; i++) {
        if (display[i] === req) {
            display[i].style.display = "block"
        } else {
            display[i].style.display = "none"
        }
    }

    function archiveshow() {
        for (var i = 0; i < display.length; i++) {
            if (display[i] == archive) {
                display[i].style.display = "block"
            } else {
                display[i].style.display = "none"
            }
        }
    }

    function categoryshow() {
        for (var i = 0; i < display.length; i++) {
            if (display[i] == category) {
                display[i].style.display = "block"
            } else {
                display[i].style.display = "none"
            }
        }
    }

    function activityshow() {
        for (var i = 0; i < display.length; i++) {
            if (display[i] == activity) {
                display[i].style.display = "block"
            } else {
                display[i].style.display = "none"
            }
        }
    }

    {{--  defaultProcess();

    function defaultProcess() {
        for (var i = 0; i < display.length; i++) {
            if (display[i] == display) {
                display[i].style.display = "block"
            } else {
                display[i].style.display = "none"
            }
        }
    }


    var request = {{ $request }};
    if (request === archive) {
        archiveshow();
    } else if (request === category) {
        categoryshow();
    } else if (request === activity) {
        activityshow();
    } else {
        defaultProcess();
    }

      --}}
</script>

<script></script>

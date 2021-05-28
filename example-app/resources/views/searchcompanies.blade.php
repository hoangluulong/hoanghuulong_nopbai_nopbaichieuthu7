<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Companies</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{!!asset('trainers')!!}">Trainers</a>
            <a class="p-2 text-dark" href="{!!asset('search/companies')!!}">Search</a>
            <a class="p-2 text-dark" href="{!!asset('companies')!!}">Companies</a>
            <a class="p-2 text-dark" href="{!!asset('categories')!!}">Categories</a>
        </nav>

    </div>

    <div class='container'>
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search for Companies</h1>

        <div class="search-container">
            <form method="get" action="{!!asset('searchcompanies')!!}"> 
                    <input type="text" class="form-control" name="k" placeholder="Tìm Kiếm...">
                  {!!Form::select('categoryName', $categories)!!}

                  <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        @isset($companies)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="color" scope="col">ID</th>
                        <th class="color" scope="col">Category_ID</th>
                        <th class="color" scope="col">Name</th>
                        <th class="color" scope="col">Web</th>
                        <th class="color" scope="col">Address</th>
                        <th class="color" scope="col">Code</th>
                        <th class="color" scope="col">Phone</th>
                        <th class="color" scope="col">Category_name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <th scope="row">{!! $company->company_id !!}</th>
                            <td>{!! $company->category_id !!}</td>
                            <td>{!! $company->company_name !!}</td>
                            <td>{!! $company->company_web !!}</td>
                            <td>{!! $company->company_address !!}</td>
                            <td>{!! $company->company_code !!}</td>
                            <td>{!! $company->company_phone !!}</td>
                            <td>{!! $company->companyOfCategory[0]['category_name'] !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!--<div class="link"> {{ $companies->withQueryString()->links() }}</div>-->

        </div>



    @endisset

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });

    </script>
    </div>


</body>

</html>

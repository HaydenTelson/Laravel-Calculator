<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            h1 {
                padding-top: 50px;
                text-align: center;
                text-decoration: underline;
                background-color: white;
            }

            #input-section {
                width: 100% !important;
                background-color: white;
            }

            #input-fields {
                text-align: center;
                background-color: white;
            }

            #input-line {
                
                align
                text-align: center;
                padding-top: 30px;
                background-color: white;
            }

            h2 {
                padding-top: 100px;
                text-align: center;
                text-decoration: underline;
                background-color: white;
            }

            #history-table {
                width: 100%;
                text-align: center;
                padding-left: 50px;
                padding-right: 50px;
                background-color: white;
                padding-bottom: 50px;

            }
            th {
                text-align: center;
                border: 1px solid black;
                background-color: white;
            }

            #calculate-button-section {
                text-align: center;
                padding-top: 25px;
                background-color: white;
            }

            #calculate-button {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            #operations
            {
                text-align: center;
                border: 1px solid black;
            }

            #operations-label
            {
                text-align: center;
            }

            #firstNumber
            {
                text-align: center;
                border: 1px solid black;
            }

            #secondNumber
            {
                text-align: center;
                border: 1px solid black;
            }
            #operator-value
            {
                text-align: center;
                background-color: white;
            }
            tr
            {
                border: 1px solid black;
            }
            td
            {
                border: 1px solid black;
            }      
        </style>
    
    </head>
    <body>
        <div id="input-section">
            <h1>My Calc</h1>

            <form method="POST" action="/calculate">
            {{ csrf_field() }}
                
                <div id="input-fields">
                    <div id="input-line">
                        <label for="firstNumber"> Enter the First Number: </label>
                        <input type="text" id="firstNumber" name="firstNumber" required>
                    </div>

                    <div id="input-line">
                        <label for="operations" id="operations-label">Select the Operation to Use: </label>
                        <select name="operators" id="operations" required>
                            <option id="operator-value" value="" selected=""> --None-- </option>
                            <option id="operator-value" value="Add">+</option>
                            <option id="operator-value" value="Subtract">-</option>
                            <option id="operator-value" value="Divide">/</option>
                            <option id="operator-value" value="Multiply">*</option>
                        </select>
                    </div>

                    <div id="input-line">
                        <label for="secondNumber"> Enter the First Number: </label>
                        <input type="text" id="secondNumber" name="secondNumber" required>
                    </div>

                    {{-- <div id="input-line">
                        <label for="operations" id="operations-label">Select the Operation to Use: </label>
                        <select name="operators" id="operations" required>
                            <option id="operator-value" value="" selected=""> --None-- </option>
                            <option id="operator-value" value="Add">+</option>
                            <option id="operator-value" value="Subtract">-</option>
                            <option id="operator-value" value="Divide">/</option>
                            <option id="operator-value" value="Multiply">*</option>
                        </select>
                    </div> --}}
                </div>

                <div id="calculate-button-section">
                    <button id="calculate-button" type="submit">Calculate!</button>
                </div>
            
            </form>
            
            <div id="results-div">
                @if(session('answer'))
                <div id="results-box">
                    <h1>{{session('answer')}}</h1>
                </div>
                @endif
            </div>

        </div>



        <div id="history-section">
            <h2>Previous Calculations</h2>

            <table id="history-table">
                <tr>
                    <th>First Number</th>
                    <th>Operation</th>
                    <th>Second Number</th>
                    <th>Result</th>
                    {{-- <th>Created On</th> --}}
                </tr>
                
                @foreach ($resultHistory as $resultHistoryRecord)
                    <tr>
                    <td>{{$resultHistoryRecord->firstNumber}}</td>
                    <td>{{$resultHistoryRecord->operator}}</td>
                    <td>{{$resultHistoryRecord->secondNumber}}</td>
                    <td>{{$resultHistoryRecord->result}}</td>
                    {{-- <td>{{$resultHistoryRecord->created_at}}</td> --}}
                    </tr>
                @endforeach
            </table>

        </div>
    </body>
</html>
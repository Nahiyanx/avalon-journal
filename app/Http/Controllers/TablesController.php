<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function index() {
        
        $txt = "<table style='border: 1px solid; border-collapse: collapse'>
                    <tr>
                        <th style='border: 1px solid'>SL</th>
                        <th style='border: 1px solid'>Name</th>
                        <th style='border: 1px solid'>Phone</th>
                    </tr>";
        for ($i=0; $i <= 50; $i++) { 
            $txt .= "<tr>
                        <td style='border: 1px solid'>".($i+1)."</td>
                        <td style='border: 1px solid'>Kiron</td>
                        <td style='border: 1px solid'>018XXX</td>
                    </tr>";
        }
        $txt .= "</table>";
        echo $txt;
    }
}

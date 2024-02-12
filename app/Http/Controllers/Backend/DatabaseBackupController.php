<?php

namespace App\Http\Controllers\Backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\DbDumper\Databases\MySql;

class DatabaseBackupController extends Controller
{
    

    use FileSaver;


    public function db_backup(Request $request)
    {
        $ds         = DIRECTORY_SEPARATOR;

        $path       = public_path() . $ds . 'backups' . $ds;
        $file       = 'backup_' . fdate(now(), 'Y_m_d_h_i_s') . '.sql';
        $directory  = $path . $file;
        $filename   = $file;


        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        if ($request->export_type == 'full') {
            MySql::create()
                ->setDbName(env('DB_DATABASE'))
                ->setUserName(env('DB_USERNAME'))
                ->setPassword(env('DB_PASSWORD'))
                ->setHost(env('DB_HOST'))
                ->setPort(env('DB_PORT'))
                ->dumpToFile($directory);
        } else {
            MySql::create()
                ->setDbName(env('DB_DATABASE'))
                ->setUserName(env('DB_USERNAME'))
                ->setPassword(env('DB_PASSWORD'))
                ->setHost(env('DB_HOST'))
                ->setPort(env('DB_PORT'))
                ->doNotCreateTables()
                ->dumpToFile($directory);
        }



        return response()->download($directory, $filename)->deleteFileAfterSend(true);
    }



    public function databaseBackupToDrive()
    {

        $messageType = 'message';


        $response = $this->backupSavedToGoogleDrive();


        if (str_contains($response, 'Error')) {
            $messageType = 'error';
        }


        return redirect()->back()->with($messageType, $response);
    }
}

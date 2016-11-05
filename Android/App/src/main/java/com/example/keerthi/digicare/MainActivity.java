package com.example.keerthi.digicare;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    /*   Intent intent1 = new Intent(this, AlertActivity.class).setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
        intent1.putExtra("message","Your Heart Rate is increasing, please make yourself Relax !!! - DigiCare");
        startActivity(intent1); */
    }
}

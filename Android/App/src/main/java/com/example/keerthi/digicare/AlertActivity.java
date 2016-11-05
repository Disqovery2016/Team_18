package com.example.keerthi.digicare;

import android.media.Ringtone;
import android.media.RingtoneManager;
import android.net.Uri;
import android.os.Bundle;
import android.os.PersistableBundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

/**
 * Created by Keerthi on 05-11-2016.
 */

public class AlertActivity extends AppCompatActivity {

    TextView e;
    Button b;
    @Override
    public void onCreate(Bundle savedInstanceState, PersistableBundle persistentState) {
        super.onCreate(savedInstanceState, persistentState);
        setContentView(R.layout.activity_alert);
        Bundle extras = getIntent().getExtras();
        e=(TextView)findViewById(R.id.message);
        b=(Button)findViewById(R.id.approve_btn);


        Uri notification = RingtoneManager.getDefaultUri(RingtoneManager.TYPE_NOTIFICATION);
        final Ringtone r = RingtoneManager.getRingtone(getApplicationContext(), notification);


        if (extras != null) {
            String value = extras.getString("message");
            e.setText(value);
            r.play();
        }else{
            String value="";
            e.setText(value);
        }
        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                r.stop();
                android.os.Process.killProcess(android.os.Process.myPid());
                System.exit(1);
            }
        });
    }
}

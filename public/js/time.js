class Time {
    constructor(time){
        let pattern = /(\d{1,2})\:(\d{2})/;
        if (!time.match(pattern)){
            this.hour = 0;
            this.minute = 0;
            this.minutes = 0;
            return;
        }
        this.hour = parseInt(time.match(pattern)[1]);
        this.minute = parseInt(time.match(pattern)[2]);
        this.minutes = 60 * this.hour + this.minute;
    }

    /* minutes から hour minute を計算する */
    setHourAndMinute(){
        this.hour = parseInt(this.minutes / 60);
        this.minute = this.minutes % 60;
    }

    add(time){
        this.minutes += time.minutes;
        this.setHourAndMinute();
        return this;
    }

    subtract(time){
        this.minutes -= time.minutes;
        this.setHourAndMinute();
        return this;
    }

    /* 引数とくらべてどうか */
    isSame(time){
        const SAME = 0;
        const EARLY = 1;
        const LATER = 2;

        if (this.minutes == time.minutes){
            return SAME;
        }else if (this.minutes < time.minutes){
            return EARLY;
        }else if (this.minutes > time.minutes){
            return LATER;
        }
    }

    getMinutes(){
        return this.minutes;
    }

    string(){
        if (this.minute < 10){
            return this.hour + ":0" + this.minute;
        }
        return this.hour + ":" + this.minute;
    }
}

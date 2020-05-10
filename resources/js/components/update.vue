<template>
    <div>
        <div class="img-block">
            <div class="row">
                <div class="col-6"><img :src="avatar" alt=""></div>
                <div class="col-6" v-for="url in urldata"><img :src=url.img alt=""></div>
            </div>
        </div>
        <div class="dada" v-for="url in urldata">
            <label for="myfile" class="chous">Выберите файлы</label>
            <input type="file" class="my" id="myfile" name="Img" multiple="multiple" :src=url.img @change="GetImage" accept="image/*"/>
        </div>
    </div>
</template>

<script>

    export default {
        props: [
            'urldata'
        ],
        data(){
            return{
                avatar:null
            }
        },

        methods:{
            GetImage(e){
                let image = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    this.avatar = e.target.result
                }
            },
            update: function () {
                console.log(this.urldata);
            }
        }
    }
</script>
<style type="scss">
    .chous {
        text-align: center;
        cursor: pointer;
        display: block;
        font: 14px/50px Tahoma;
        border: 0.1px solid #BFBFBF;
        margin-bottom: 0;
        color: black;
        background: #fff;
    }

    .my {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .img-block {
        width: 100%;
        height: 295px;
        background: white;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 29.2px;
        border: 0;
    }

    img {
        object-fit: contain;
        width: 100%;
        height: 100%;
    }

    .row {
        width: 100%;
    }
</style>

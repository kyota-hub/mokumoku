<template>
  <v-app>
    <v-container fill-height fluid>
      <v-row align="center" justify="center">
        <v-col cols="6">
          <v-card elevation="4">
            <v-row align="center" justify="center">
              <v-col cols="6">
                <!-- テキストエリア -->
                <p>top</p>
                <v-text-field
                  v-model="param.title"
                  @input="inputDataShow(param.title)"
                  label="input"
                  solo
                ></v-text-field>
                <!-- リンクエリア -->
                <v-btn elevation="2" block @click="next(1)">ログイン</v-btn>
                <v-btn elevation="2" block @click="next(2)">新規作成</v-btn>
                <v-btn elevation="2" block @click="next(3)">コンテンツ一覧</v-btn>
                <v-btn elevation="2" block @click="next(4)">サービス概要</v-btn>
                <v-btn elevation="2" block @click="next(5)">問い合わせ</v-btn>
              </v-col>
            </v-row>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>

import Entity from "../js/index";

export default {
  name: "Top",

  // data
  data: () => ({
    // apiからデータ取得
    param: new Entity(),
  }),

  methods: {
    // 入力した文字列をアラート表示させる
    inputDataShow(inputData) {
      console.log(inputData);
    },

    next(num) {
      if (num === 1) {
        this.$router.push({ name: "Login" });
      } else {
        this.$router.push({ name: "Top" });
      }
    },
  },

  created() {
    console.log(this.param);
  },
};
</script>

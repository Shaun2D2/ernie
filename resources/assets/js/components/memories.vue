<template>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
      <button class="btn btn-block btn-lg btn-default" style="margin:15px 0px;" @click="memoryForm">Add your memories</button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6" v-for="memory in memories">
      <blockquote class="blockquote-summary">
        {{ memory.body.substring(0, 75) }} <a href="#" class="btn-link" v-if="memory.body.length > 75" @click.prevent="more(memory)">...</a>
        <footer> {{ memory.name }}</footer>
      </blockquote>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="memory-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Memory</h4>
        </div>
        <div class="modal-body">
          <blockquote>
            {{ active.body }}
          </blockquote>
          <footer>
            {{ active.name }}
          </footer>
          </blockquote>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" tabindex="-1" role="dialog" id="new-memory-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add a Memory</h4>
        </div>
        <div class="modal-body">
          <div class="form-group {{ errors['name']? 'has-error' : '' }}">
            <label>Your name</label>
            <input type="text" class="form-control" v-model="newMemory.name" />
            <p class="help-block"> {{ errors['name'] }} </p>
          </div>
          <div class="form-group {{ errors['body']? 'has-error' : '' }}">
            <label>Memory</label>
            <textarea class="form-control" v-model="newMemory.body" rows="5"></textarea>
            <p class="help-block"> {{ errors['body'] }} </p>
          </div>
          <button class="btn btn-block btn-success" @click="sendMemory">Add</button>
          <hr  />
          <small><sup>*</sup> Please be respectful, any comments deemed inappropriate will not be approved.  Please allow 72 hours for your memory to show up.</small>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</template>


<script>

export default {

  ready() {

    this.getMemories();

  },

  data() {
    return {
      memories:[],
      active:{},
      errors:[],
      newMemory: {
        name: '',
        body: ''
      }
    }
  },

  methods: {

    getMemories() {

      this.$http.get('/api/memories').then(response => {

        this.memories = response.data;

      });

    },

    sendMemory() {

      this.$http.post('/api/memories', this.newMemory).then(response => {

        $('#new-memory-modal').modal('hide');

        alert('memory has been added.');

      }, response => {

        this.errors = response.data;

      });

    },

    more(memory) {

      this.active = memory;

      $('#memory-modal').modal('show');

    },

    memoryForm() {

      $('#new-memory-modal').modal('show');

    }

  }

}

</script>

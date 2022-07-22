const db = firebase.firestore();

const taskForm = document.getElementById("task-form");
const tasksContainer = document.getElementById("tasks-container");

let editStatus = false;
let id = '';

/**
 * Save a New Task in Firestore
 * @param {string} nombres the nombres of the Task
 * @param {string} dni the dni of the Task
 * @param {string} direccion the direccion of the Task
 * @param {string} plan the plan of the Task
 * @param {string} ip the ip of the Task
 * @param {string} fechainstalacion the fechainstalacion of the Task
 */
const saveTask = (nombres, dni, direccion, plan, ip, fechainstalacion) =>
  db.collection("tasks").doc().set({
    nombres,
    dni,
    direccion,
    plan,
    ip,
    fechainstalacion,
  });

const getTasks = () => db.collection("tasks").get();

const onGetTasks = (callback) => db.collection("tasks").onSnapshot(callback);

const deleteTask = (id) => db.collection("tasks").doc(id).delete();

const getTask = (id) => db.collection("tasks").doc(id).get();

const updateTask = (id, updatedTask) => db.collection('tasks').doc(id).update(updatedTask);

window.addEventListener("DOMContentLoaded", async (e) => {
  onGetTasks((querySnapshot) => {
    tasksContainer.innerHTML = "";

    querySnapshot.forEach((doc) => {
      const task = doc.data();

      tasksContainer.innerHTML += `<div class="card card-body mt-2 border-primary">
    <h3 class="h5">${task.nombres} </h3>
    <p>DNI: ${task.dni}</p>
    <p>Dirección: ${task.direccion}</p>
    <h3 class="h6"> Plan: ${task.plan}</h3>
    <p>IP: ${task.ip}</p>
    <h3 class="h6">F-Instl: ${task.fechainstalacion}</h3>
    <div>
      <button class="btn btn-primary btn-delete" data-id="${doc.id}">
        🗑 Eliminar
      </button>
      <button class="btn btn-secondary btn-edit" data-id="${doc.id}">
        🖉 Editar
      </button>
    </div>
  </div>`;
    });

    const btnsDelete = tasksContainer.querySelectorAll(".btn-delete");
    btnsDelete.forEach((btn) =>
      btn.addEventListener("click", async (e) => {
        console.log(e.target.dataset.id);
        try {
          await deleteTask(e.target.dataset.id);
        } catch (error) {
          console.log(error);
        }
      })
    );

    const btnsEdit = tasksContainer.querySelectorAll(".btn-edit");
    btnsEdit.forEach((btn) => {
      btn.addEventListener("click", async (e) => {
        try {
          const doc = await getTask(e.target.dataset.id);
          const task = doc.data();
          taskForm["task-nombres"].value = task.nombres;
          taskForm["task-dni"].value = task.dni;
          taskForm["task-direccion"].value = task.direccion;
          taskForm["task-plan"].value = task.plan;
          taskForm["task-ip"].value = task.ip;
          taskForm["task-fechainstalacion"].value = task.fechainstalacion;

          editStatus = true;
          id = doc.id;
          taskForm["btn-task-form"].innerText = "Actualizar";

        } catch (error) {
          console.log(error);
        }
      });
    });
  });
});

taskForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const nombres = taskForm["task-nombres"];
  const dni = taskForm["task-dni"];
  const direccion = taskForm["task-direccion"];
  const plan= taskForm["task-plan"];
  const ip= taskForm["task-ip"];
  const fechainstalacion= taskForm["task-fechainstalacion"];

  try {
    if (!editStatus) {
      await saveTask(nombres.value, dni.value, direccion.value, plan.value, ip.value, fechainstalacion.value);
    } else {
      await updateTask(id, {
        nombres: nombres.value,
        dni: dni.value,
        direccion: direccion.value,
        plan: plan.value,
        ip: ip.value,
        fechainstalacion: fechainstalacion.value,
      })

      editStatus = false;
      id = '';
      taskForm['btn-task-form'].innerText = 'Save';
    }

    taskForm.reset();
    nombres.focus();
  } catch (error) {
    console.log(error);
  }
});
